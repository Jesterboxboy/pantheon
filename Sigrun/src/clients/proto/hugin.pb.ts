// THIS IS AN AUTOGENERATED FILE. DO NOT EDIT THIS FILE DIRECTLY.
// Source: proto/hugin.proto
/* eslint-disable */

import type { ByteSource } from "protoscript";
import { BinaryReader, BinaryWriter } from "protoscript";
import { JSONrequest, PBrequest } from "twirpscript";
// This is the minimum version supported by the current runtime.
// If this line fails typechecking, breaking changes have been introduced and this
// file needs to be regenerated by running `npx twirpscript`.
export { MIN_SUPPORTED_VERSION_0_0_56 } from "twirpscript";
import type { ClientConfiguration } from "twirpscript";

//========================================//
//                 Types                  //
//========================================//

export interface GetLastDayPayload {}

export interface GetLastDayResponse {
  data: HuginData[];
}

export interface GetLastMonthPayload {}

export interface GetLastMonthResponse {
  data: HuginData[];
}

export interface GetLastYearPayload {}

export interface GetLastYearResponse {
  data: HuginData[];
}

export interface HuginData {
  datetime: string;
  eventCount: number;
  uniqCount: number;
  siteId: string;
  country: string;
  city: string;
  browser: string;
  os: string;
  device: string;
  screen: string;
  language: string;
  eventType: string;
  hostname: string;
}

//========================================//
//         Hugin Protobuf Client          //
//========================================//

export async function GetLastDay(
  getLastDayPayload: GetLastDayPayload,
  config?: ClientConfiguration
): Promise<GetLastDayResponse> {
  const response = await PBrequest(
    "/common.Hugin/GetLastDay",
    GetLastDayPayload.encode(getLastDayPayload),
    config
  );
  return GetLastDayResponse.decode(response);
}

export async function GetLastMonth(
  getLastMonthPayload: GetLastMonthPayload,
  config?: ClientConfiguration
): Promise<GetLastMonthResponse> {
  const response = await PBrequest(
    "/common.Hugin/GetLastMonth",
    GetLastMonthPayload.encode(getLastMonthPayload),
    config
  );
  return GetLastMonthResponse.decode(response);
}

export async function GetLastYear(
  getLastYearPayload: GetLastYearPayload,
  config?: ClientConfiguration
): Promise<GetLastYearResponse> {
  const response = await PBrequest(
    "/common.Hugin/GetLastYear",
    GetLastYearPayload.encode(getLastYearPayload),
    config
  );
  return GetLastYearResponse.decode(response);
}

//========================================//
//           Hugin JSON Client            //
//========================================//

export async function GetLastDayJSON(
  getLastDayPayload: GetLastDayPayload,
  config?: ClientConfiguration
): Promise<GetLastDayResponse> {
  const response = await JSONrequest(
    "/common.Hugin/GetLastDay",
    GetLastDayPayloadJSON.encode(getLastDayPayload),
    config
  );
  return GetLastDayResponseJSON.decode(response);
}

export async function GetLastMonthJSON(
  getLastMonthPayload: GetLastMonthPayload,
  config?: ClientConfiguration
): Promise<GetLastMonthResponse> {
  const response = await JSONrequest(
    "/common.Hugin/GetLastMonth",
    GetLastMonthPayloadJSON.encode(getLastMonthPayload),
    config
  );
  return GetLastMonthResponseJSON.decode(response);
}

export async function GetLastYearJSON(
  getLastYearPayload: GetLastYearPayload,
  config?: ClientConfiguration
): Promise<GetLastYearResponse> {
  const response = await JSONrequest(
    "/common.Hugin/GetLastYear",
    GetLastYearPayloadJSON.encode(getLastYearPayload),
    config
  );
  return GetLastYearResponseJSON.decode(response);
}

//========================================//
//                 Hugin                  //
//========================================//

export interface Hugin<Context = unknown> {
  GetLastDay: (
    getLastDayPayload: GetLastDayPayload,
    context: Context
  ) => Promise<GetLastDayResponse> | GetLastDayResponse;
  GetLastMonth: (
    getLastMonthPayload: GetLastMonthPayload,
    context: Context
  ) => Promise<GetLastMonthResponse> | GetLastMonthResponse;
  GetLastYear: (
    getLastYearPayload: GetLastYearPayload,
    context: Context
  ) => Promise<GetLastYearResponse> | GetLastYearResponse;
}

export function createHugin<Context>(service: Hugin<Context>) {
  return {
    name: "common.Hugin",
    methods: {
      GetLastDay: {
        name: "GetLastDay",
        handler: service.GetLastDay,
        input: { protobuf: GetLastDayPayload, json: GetLastDayPayloadJSON },
        output: { protobuf: GetLastDayResponse, json: GetLastDayResponseJSON },
      },
      GetLastMonth: {
        name: "GetLastMonth",
        handler: service.GetLastMonth,
        input: { protobuf: GetLastMonthPayload, json: GetLastMonthPayloadJSON },
        output: {
          protobuf: GetLastMonthResponse,
          json: GetLastMonthResponseJSON,
        },
      },
      GetLastYear: {
        name: "GetLastYear",
        handler: service.GetLastYear,
        input: { protobuf: GetLastYearPayload, json: GetLastYearPayloadJSON },
        output: {
          protobuf: GetLastYearResponse,
          json: GetLastYearResponseJSON,
        },
      },
    },
  } as const;
}

//========================================//
//        Protobuf Encode / Decode        //
//========================================//

export const GetLastDayPayload = {
  /**
   * Serializes GetLastDayPayload to protobuf.
   */
  encode: function (_msg?: Partial<GetLastDayPayload>): Uint8Array {
    return new Uint8Array();
  },

  /**
   * Deserializes GetLastDayPayload from protobuf.
   */
  decode: function (_bytes?: ByteSource): GetLastDayPayload {
    return {};
  },

  /**
   * Initializes GetLastDayPayload with all fields set to their default value.
   */
  initialize: function (): GetLastDayPayload {
    return {};
  },

  /**
   * @private
   */
  _writeMessage: function (
    _msg: Partial<GetLastDayPayload>,
    writer: BinaryWriter
  ): BinaryWriter {
    return writer;
  },

  /**
   * @private
   */
  _readMessage: function (
    _msg: GetLastDayPayload,
    _reader: BinaryReader
  ): GetLastDayPayload {
    return _msg;
  },
};

export const GetLastDayResponse = {
  /**
   * Serializes GetLastDayResponse to protobuf.
   */
  encode: function (msg: Partial<GetLastDayResponse>): Uint8Array {
    return GetLastDayResponse._writeMessage(
      msg,
      new BinaryWriter()
    ).getResultBuffer();
  },

  /**
   * Deserializes GetLastDayResponse from protobuf.
   */
  decode: function (bytes: ByteSource): GetLastDayResponse {
    return GetLastDayResponse._readMessage(
      GetLastDayResponse.initialize(),
      new BinaryReader(bytes)
    );
  },

  /**
   * Initializes GetLastDayResponse with all fields set to their default value.
   */
  initialize: function (): GetLastDayResponse {
    return {
      data: [],
    };
  },

  /**
   * @private
   */
  _writeMessage: function (
    msg: Partial<GetLastDayResponse>,
    writer: BinaryWriter
  ): BinaryWriter {
    if (msg.data?.length) {
      writer.writeRepeatedMessage(1, msg.data as any, HuginData._writeMessage);
    }
    return writer;
  },

  /**
   * @private
   */
  _readMessage: function (
    msg: GetLastDayResponse,
    reader: BinaryReader
  ): GetLastDayResponse {
    while (reader.nextField()) {
      const field = reader.getFieldNumber();
      switch (field) {
        case 1: {
          const m = HuginData.initialize();
          reader.readMessage(m, HuginData._readMessage);
          msg.data.push(m);
          break;
        }
        default: {
          reader.skipField();
          break;
        }
      }
    }
    return msg;
  },
};

export const GetLastMonthPayload = {
  /**
   * Serializes GetLastMonthPayload to protobuf.
   */
  encode: function (_msg?: Partial<GetLastMonthPayload>): Uint8Array {
    return new Uint8Array();
  },

  /**
   * Deserializes GetLastMonthPayload from protobuf.
   */
  decode: function (_bytes?: ByteSource): GetLastMonthPayload {
    return {};
  },

  /**
   * Initializes GetLastMonthPayload with all fields set to their default value.
   */
  initialize: function (): GetLastMonthPayload {
    return {};
  },

  /**
   * @private
   */
  _writeMessage: function (
    _msg: Partial<GetLastMonthPayload>,
    writer: BinaryWriter
  ): BinaryWriter {
    return writer;
  },

  /**
   * @private
   */
  _readMessage: function (
    _msg: GetLastMonthPayload,
    _reader: BinaryReader
  ): GetLastMonthPayload {
    return _msg;
  },
};

export const GetLastMonthResponse = {
  /**
   * Serializes GetLastMonthResponse to protobuf.
   */
  encode: function (msg: Partial<GetLastMonthResponse>): Uint8Array {
    return GetLastMonthResponse._writeMessage(
      msg,
      new BinaryWriter()
    ).getResultBuffer();
  },

  /**
   * Deserializes GetLastMonthResponse from protobuf.
   */
  decode: function (bytes: ByteSource): GetLastMonthResponse {
    return GetLastMonthResponse._readMessage(
      GetLastMonthResponse.initialize(),
      new BinaryReader(bytes)
    );
  },

  /**
   * Initializes GetLastMonthResponse with all fields set to their default value.
   */
  initialize: function (): GetLastMonthResponse {
    return {
      data: [],
    };
  },

  /**
   * @private
   */
  _writeMessage: function (
    msg: Partial<GetLastMonthResponse>,
    writer: BinaryWriter
  ): BinaryWriter {
    if (msg.data?.length) {
      writer.writeRepeatedMessage(1, msg.data as any, HuginData._writeMessage);
    }
    return writer;
  },

  /**
   * @private
   */
  _readMessage: function (
    msg: GetLastMonthResponse,
    reader: BinaryReader
  ): GetLastMonthResponse {
    while (reader.nextField()) {
      const field = reader.getFieldNumber();
      switch (field) {
        case 1: {
          const m = HuginData.initialize();
          reader.readMessage(m, HuginData._readMessage);
          msg.data.push(m);
          break;
        }
        default: {
          reader.skipField();
          break;
        }
      }
    }
    return msg;
  },
};

export const GetLastYearPayload = {
  /**
   * Serializes GetLastYearPayload to protobuf.
   */
  encode: function (_msg?: Partial<GetLastYearPayload>): Uint8Array {
    return new Uint8Array();
  },

  /**
   * Deserializes GetLastYearPayload from protobuf.
   */
  decode: function (_bytes?: ByteSource): GetLastYearPayload {
    return {};
  },

  /**
   * Initializes GetLastYearPayload with all fields set to their default value.
   */
  initialize: function (): GetLastYearPayload {
    return {};
  },

  /**
   * @private
   */
  _writeMessage: function (
    _msg: Partial<GetLastYearPayload>,
    writer: BinaryWriter
  ): BinaryWriter {
    return writer;
  },

  /**
   * @private
   */
  _readMessage: function (
    _msg: GetLastYearPayload,
    _reader: BinaryReader
  ): GetLastYearPayload {
    return _msg;
  },
};

export const GetLastYearResponse = {
  /**
   * Serializes GetLastYearResponse to protobuf.
   */
  encode: function (msg: Partial<GetLastYearResponse>): Uint8Array {
    return GetLastYearResponse._writeMessage(
      msg,
      new BinaryWriter()
    ).getResultBuffer();
  },

  /**
   * Deserializes GetLastYearResponse from protobuf.
   */
  decode: function (bytes: ByteSource): GetLastYearResponse {
    return GetLastYearResponse._readMessage(
      GetLastYearResponse.initialize(),
      new BinaryReader(bytes)
    );
  },

  /**
   * Initializes GetLastYearResponse with all fields set to their default value.
   */
  initialize: function (): GetLastYearResponse {
    return {
      data: [],
    };
  },

  /**
   * @private
   */
  _writeMessage: function (
    msg: Partial<GetLastYearResponse>,
    writer: BinaryWriter
  ): BinaryWriter {
    if (msg.data?.length) {
      writer.writeRepeatedMessage(1, msg.data as any, HuginData._writeMessage);
    }
    return writer;
  },

  /**
   * @private
   */
  _readMessage: function (
    msg: GetLastYearResponse,
    reader: BinaryReader
  ): GetLastYearResponse {
    while (reader.nextField()) {
      const field = reader.getFieldNumber();
      switch (field) {
        case 1: {
          const m = HuginData.initialize();
          reader.readMessage(m, HuginData._readMessage);
          msg.data.push(m);
          break;
        }
        default: {
          reader.skipField();
          break;
        }
      }
    }
    return msg;
  },
};

export const HuginData = {
  /**
   * Serializes HuginData to protobuf.
   */
  encode: function (msg: Partial<HuginData>): Uint8Array {
    return HuginData._writeMessage(msg, new BinaryWriter()).getResultBuffer();
  },

  /**
   * Deserializes HuginData from protobuf.
   */
  decode: function (bytes: ByteSource): HuginData {
    return HuginData._readMessage(
      HuginData.initialize(),
      new BinaryReader(bytes)
    );
  },

  /**
   * Initializes HuginData with all fields set to their default value.
   */
  initialize: function (): HuginData {
    return {
      datetime: "",
      eventCount: 0,
      uniqCount: 0,
      siteId: "",
      country: "",
      city: "",
      browser: "",
      os: "",
      device: "",
      screen: "",
      language: "",
      eventType: "",
      hostname: "",
    };
  },

  /**
   * @private
   */
  _writeMessage: function (
    msg: Partial<HuginData>,
    writer: BinaryWriter
  ): BinaryWriter {
    if (msg.datetime) {
      writer.writeString(1, msg.datetime);
    }
    if (msg.eventCount) {
      writer.writeInt32(2, msg.eventCount);
    }
    if (msg.uniqCount) {
      writer.writeInt32(3, msg.uniqCount);
    }
    if (msg.siteId) {
      writer.writeString(4, msg.siteId);
    }
    if (msg.country) {
      writer.writeString(5, msg.country);
    }
    if (msg.city) {
      writer.writeString(6, msg.city);
    }
    if (msg.browser) {
      writer.writeString(7, msg.browser);
    }
    if (msg.os) {
      writer.writeString(8, msg.os);
    }
    if (msg.device) {
      writer.writeString(9, msg.device);
    }
    if (msg.screen) {
      writer.writeString(10, msg.screen);
    }
    if (msg.language) {
      writer.writeString(11, msg.language);
    }
    if (msg.eventType) {
      writer.writeString(12, msg.eventType);
    }
    if (msg.hostname) {
      writer.writeString(13, msg.hostname);
    }
    return writer;
  },

  /**
   * @private
   */
  _readMessage: function (msg: HuginData, reader: BinaryReader): HuginData {
    while (reader.nextField()) {
      const field = reader.getFieldNumber();
      switch (field) {
        case 1: {
          msg.datetime = reader.readString();
          break;
        }
        case 2: {
          msg.eventCount = reader.readInt32();
          break;
        }
        case 3: {
          msg.uniqCount = reader.readInt32();
          break;
        }
        case 4: {
          msg.siteId = reader.readString();
          break;
        }
        case 5: {
          msg.country = reader.readString();
          break;
        }
        case 6: {
          msg.city = reader.readString();
          break;
        }
        case 7: {
          msg.browser = reader.readString();
          break;
        }
        case 8: {
          msg.os = reader.readString();
          break;
        }
        case 9: {
          msg.device = reader.readString();
          break;
        }
        case 10: {
          msg.screen = reader.readString();
          break;
        }
        case 11: {
          msg.language = reader.readString();
          break;
        }
        case 12: {
          msg.eventType = reader.readString();
          break;
        }
        case 13: {
          msg.hostname = reader.readString();
          break;
        }
        default: {
          reader.skipField();
          break;
        }
      }
    }
    return msg;
  },
};

//========================================//
//          JSON Encode / Decode          //
//========================================//

export const GetLastDayPayloadJSON = {
  /**
   * Serializes GetLastDayPayload to JSON.
   */
  encode: function (_msg?: Partial<GetLastDayPayload>): string {
    return "{}";
  },

  /**
   * Deserializes GetLastDayPayload from JSON.
   */
  decode: function (_json?: string): GetLastDayPayload {
    return {};
  },

  /**
   * Initializes GetLastDayPayload with all fields set to their default value.
   */
  initialize: function (): GetLastDayPayload {
    return {};
  },

  /**
   * @private
   */
  _writeMessage: function (
    _msg: Partial<GetLastDayPayload>
  ): Record<string, unknown> {
    return {};
  },

  /**
   * @private
   */
  _readMessage: function (
    msg: GetLastDayPayload,
    _json: any
  ): GetLastDayPayload {
    return msg;
  },
};

export const GetLastDayResponseJSON = {
  /**
   * Serializes GetLastDayResponse to JSON.
   */
  encode: function (msg: Partial<GetLastDayResponse>): string {
    return JSON.stringify(GetLastDayResponseJSON._writeMessage(msg));
  },

  /**
   * Deserializes GetLastDayResponse from JSON.
   */
  decode: function (json: string): GetLastDayResponse {
    return GetLastDayResponseJSON._readMessage(
      GetLastDayResponseJSON.initialize(),
      JSON.parse(json)
    );
  },

  /**
   * Initializes GetLastDayResponse with all fields set to their default value.
   */
  initialize: function (): GetLastDayResponse {
    return {
      data: [],
    };
  },

  /**
   * @private
   */
  _writeMessage: function (
    msg: Partial<GetLastDayResponse>
  ): Record<string, unknown> {
    const json: Record<string, unknown> = {};
    if (msg.data?.length) {
      json["data"] = msg.data.map(HuginDataJSON._writeMessage);
    }
    return json;
  },

  /**
   * @private
   */
  _readMessage: function (
    msg: GetLastDayResponse,
    json: any
  ): GetLastDayResponse {
    const _data_ = json["data"];
    if (_data_) {
      for (const item of _data_) {
        const m = HuginData.initialize();
        HuginDataJSON._readMessage(m, item);
        msg.data.push(m);
      }
    }
    return msg;
  },
};

export const GetLastMonthPayloadJSON = {
  /**
   * Serializes GetLastMonthPayload to JSON.
   */
  encode: function (_msg?: Partial<GetLastMonthPayload>): string {
    return "{}";
  },

  /**
   * Deserializes GetLastMonthPayload from JSON.
   */
  decode: function (_json?: string): GetLastMonthPayload {
    return {};
  },

  /**
   * Initializes GetLastMonthPayload with all fields set to their default value.
   */
  initialize: function (): GetLastMonthPayload {
    return {};
  },

  /**
   * @private
   */
  _writeMessage: function (
    _msg: Partial<GetLastMonthPayload>
  ): Record<string, unknown> {
    return {};
  },

  /**
   * @private
   */
  _readMessage: function (
    msg: GetLastMonthPayload,
    _json: any
  ): GetLastMonthPayload {
    return msg;
  },
};

export const GetLastMonthResponseJSON = {
  /**
   * Serializes GetLastMonthResponse to JSON.
   */
  encode: function (msg: Partial<GetLastMonthResponse>): string {
    return JSON.stringify(GetLastMonthResponseJSON._writeMessage(msg));
  },

  /**
   * Deserializes GetLastMonthResponse from JSON.
   */
  decode: function (json: string): GetLastMonthResponse {
    return GetLastMonthResponseJSON._readMessage(
      GetLastMonthResponseJSON.initialize(),
      JSON.parse(json)
    );
  },

  /**
   * Initializes GetLastMonthResponse with all fields set to their default value.
   */
  initialize: function (): GetLastMonthResponse {
    return {
      data: [],
    };
  },

  /**
   * @private
   */
  _writeMessage: function (
    msg: Partial<GetLastMonthResponse>
  ): Record<string, unknown> {
    const json: Record<string, unknown> = {};
    if (msg.data?.length) {
      json["data"] = msg.data.map(HuginDataJSON._writeMessage);
    }
    return json;
  },

  /**
   * @private
   */
  _readMessage: function (
    msg: GetLastMonthResponse,
    json: any
  ): GetLastMonthResponse {
    const _data_ = json["data"];
    if (_data_) {
      for (const item of _data_) {
        const m = HuginData.initialize();
        HuginDataJSON._readMessage(m, item);
        msg.data.push(m);
      }
    }
    return msg;
  },
};

export const GetLastYearPayloadJSON = {
  /**
   * Serializes GetLastYearPayload to JSON.
   */
  encode: function (_msg?: Partial<GetLastYearPayload>): string {
    return "{}";
  },

  /**
   * Deserializes GetLastYearPayload from JSON.
   */
  decode: function (_json?: string): GetLastYearPayload {
    return {};
  },

  /**
   * Initializes GetLastYearPayload with all fields set to their default value.
   */
  initialize: function (): GetLastYearPayload {
    return {};
  },

  /**
   * @private
   */
  _writeMessage: function (
    _msg: Partial<GetLastYearPayload>
  ): Record<string, unknown> {
    return {};
  },

  /**
   * @private
   */
  _readMessage: function (
    msg: GetLastYearPayload,
    _json: any
  ): GetLastYearPayload {
    return msg;
  },
};

export const GetLastYearResponseJSON = {
  /**
   * Serializes GetLastYearResponse to JSON.
   */
  encode: function (msg: Partial<GetLastYearResponse>): string {
    return JSON.stringify(GetLastYearResponseJSON._writeMessage(msg));
  },

  /**
   * Deserializes GetLastYearResponse from JSON.
   */
  decode: function (json: string): GetLastYearResponse {
    return GetLastYearResponseJSON._readMessage(
      GetLastYearResponseJSON.initialize(),
      JSON.parse(json)
    );
  },

  /**
   * Initializes GetLastYearResponse with all fields set to their default value.
   */
  initialize: function (): GetLastYearResponse {
    return {
      data: [],
    };
  },

  /**
   * @private
   */
  _writeMessage: function (
    msg: Partial<GetLastYearResponse>
  ): Record<string, unknown> {
    const json: Record<string, unknown> = {};
    if (msg.data?.length) {
      json["data"] = msg.data.map(HuginDataJSON._writeMessage);
    }
    return json;
  },

  /**
   * @private
   */
  _readMessage: function (
    msg: GetLastYearResponse,
    json: any
  ): GetLastYearResponse {
    const _data_ = json["data"];
    if (_data_) {
      for (const item of _data_) {
        const m = HuginData.initialize();
        HuginDataJSON._readMessage(m, item);
        msg.data.push(m);
      }
    }
    return msg;
  },
};

export const HuginDataJSON = {
  /**
   * Serializes HuginData to JSON.
   */
  encode: function (msg: Partial<HuginData>): string {
    return JSON.stringify(HuginDataJSON._writeMessage(msg));
  },

  /**
   * Deserializes HuginData from JSON.
   */
  decode: function (json: string): HuginData {
    return HuginDataJSON._readMessage(
      HuginDataJSON.initialize(),
      JSON.parse(json)
    );
  },

  /**
   * Initializes HuginData with all fields set to their default value.
   */
  initialize: function (): HuginData {
    return {
      datetime: "",
      eventCount: 0,
      uniqCount: 0,
      siteId: "",
      country: "",
      city: "",
      browser: "",
      os: "",
      device: "",
      screen: "",
      language: "",
      eventType: "",
      hostname: "",
    };
  },

  /**
   * @private
   */
  _writeMessage: function (msg: Partial<HuginData>): Record<string, unknown> {
    const json: Record<string, unknown> = {};
    if (msg.datetime) {
      json["datetime"] = msg.datetime;
    }
    if (msg.eventCount) {
      json["eventCount"] = msg.eventCount;
    }
    if (msg.uniqCount) {
      json["uniqCount"] = msg.uniqCount;
    }
    if (msg.siteId) {
      json["siteId"] = msg.siteId;
    }
    if (msg.country) {
      json["country"] = msg.country;
    }
    if (msg.city) {
      json["city"] = msg.city;
    }
    if (msg.browser) {
      json["browser"] = msg.browser;
    }
    if (msg.os) {
      json["os"] = msg.os;
    }
    if (msg.device) {
      json["device"] = msg.device;
    }
    if (msg.screen) {
      json["screen"] = msg.screen;
    }
    if (msg.language) {
      json["language"] = msg.language;
    }
    if (msg.eventType) {
      json["eventType"] = msg.eventType;
    }
    if (msg.hostname) {
      json["hostname"] = msg.hostname;
    }
    return json;
  },

  /**
   * @private
   */
  _readMessage: function (msg: HuginData, json: any): HuginData {
    const _datetime_ = json["datetime"];
    if (_datetime_) {
      msg.datetime = _datetime_;
    }
    const _eventCount_ = json["eventCount"] ?? json["event_count"];
    if (_eventCount_) {
      msg.eventCount = _eventCount_;
    }
    const _uniqCount_ = json["uniqCount"] ?? json["uniq_count"];
    if (_uniqCount_) {
      msg.uniqCount = _uniqCount_;
    }
    const _siteId_ = json["siteId"] ?? json["site_id"];
    if (_siteId_) {
      msg.siteId = _siteId_;
    }
    const _country_ = json["country"];
    if (_country_) {
      msg.country = _country_;
    }
    const _city_ = json["city"];
    if (_city_) {
      msg.city = _city_;
    }
    const _browser_ = json["browser"];
    if (_browser_) {
      msg.browser = _browser_;
    }
    const _os_ = json["os"];
    if (_os_) {
      msg.os = _os_;
    }
    const _device_ = json["device"];
    if (_device_) {
      msg.device = _device_;
    }
    const _screen_ = json["screen"];
    if (_screen_) {
      msg.screen = _screen_;
    }
    const _language_ = json["language"];
    if (_language_) {
      msg.language = _language_;
    }
    const _eventType_ = json["eventType"] ?? json["event_type"];
    if (_eventType_) {
      msg.eventType = _eventType_;
    }
    const _hostname_ = json["hostname"];
    if (_hostname_) {
      msg.hostname = _hostname_;
    }
    return msg;
  },
};
