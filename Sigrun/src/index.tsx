import React from 'react';
import ReactDOM from 'react-dom/client';
import { App } from './App';
import { StorageStrategyClient } from '../../Common/storageStrategyClient';
import { Isomorphic } from './hooks/isomorphic';

const storageStrategy = new StorageStrategyClient(import.meta.env.VITE_COOKIE_DOMAIN || null);

let isomorphicCtxValue = {};
if (window && (window as any).initialData) {
  isomorphicCtxValue = (window as any).initialData;
}

if (import.meta.env.MODE === 'development') {
  ReactDOM.createRoot(document.getElementById('root') as HTMLElement).render(
    <React.StrictMode>
      <Isomorphic.Provider value={isomorphicCtxValue}>
        <App storageStrategy={storageStrategy} />
      </Isomorphic.Provider>
    </React.StrictMode>
  );
} else {
  ReactDOM.hydrateRoot(
    document.getElementById('root') as HTMLElement,
    <React.StrictMode>
      <Isomorphic.Provider value={isomorphicCtxValue}>
        <App storageStrategy={storageStrategy} />
      </Isomorphic.Provider>
    </React.StrictMode>
  );
}
