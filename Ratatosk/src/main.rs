mod ws_essentials;
mod ws_lib;
mod messages;
mod config;
extern crate mio;
extern crate http_muncher;
extern crate sha1;
extern crate rustc_serialize;
extern crate bytes;
extern crate byteorder;
#[macro_use]
extern crate log;
extern crate serde;
#[macro_use]
extern crate serde_derive;
extern crate serde_json;
extern crate env_logger;

use std::borrow::{Borrow, BorrowMut};
use std::collections::HashMap;
use std::net::SocketAddr;
use mio::Token;
use ws_lib::interface::*;
use messages::types::*;
use crate::config::get_config;
use crate::messages::handlers;

fn main() {
  env_logger::init().unwrap();
  let settings = get_config();

  let mut listen_addr = String::from("0.0.0.0:");
  listen_addr.push_str(settings.listen_port.to_string().as_str());
  let mut ws = WebSocket::new(listen_addr.parse::<SocketAddr>().unwrap());
  let mut sessions: HashMap<Token, String> = HashMap::new();
  let mut events: HashMap<Token, u32> = HashMap::new();

  loop {
    match ws.next() {
      (tok, WebSocketEvent::Connect) => {
        if cfg!(debug_assertions) {
          println!("Connected peer: {:?}", tok);
        }
      },

      (tok, WebSocketEvent::Close(_status)) => {
        if cfg!(debug_assertions) {
          println!("Disconnected peer: {:?}", tok);
        }
        sessions.remove(&tok);
        events.remove(&tok);
      },

      (tok, WebSocketEvent::TextMessage(msg)) => {
        let data: Result<GenericIncomingRequest, _> = serde_json::from_str(msg.as_str());
        match data {
          Ok(val) => handlers::run(
            settings.borrow(),
            ws.borrow_mut(),
            sessions.borrow_mut(),
            events.borrow_mut(),
            tok,
            val
          ),
          Err(_e) => println!("Failed to parse JSON: {}", msg)
        }
      },

      (tok, WebSocketEvent::BinaryMessage(msg)) => {
        // println!("msg from {:?}", tok);
        let response = WebSocketEvent::BinaryMessage(msg.clone());
        ws.send((tok, response));
      },

      _ => {}
    }
  }
}