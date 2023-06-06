/*  Forseti: personal area & event control panel
 *  Copyright (C) 2023  o.klimenko aka ctizen
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

function errHandler(
  errorMsg: Event | string,
  currentUrl: string | undefined,
  lineNumber: number | undefined,
  charNumber: number | undefined,
  err: Error | undefined
) {
  fetch(`${import.meta.env.VITE_SIGRUN_URL}/servicelog`, {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      source: 'Forseti [common]',
      requestTo: '-',
      requestFrom: currentUrl,
      details: errorMsg?.toString() ?? err?.message,
    }),
  });
}

export function registerFrontErrorHandler() {
  if (typeof window === 'undefined' || (window as any).__errHandlerRegistered) {
    return;
  }

  if (window.onerror) {
    const prevHandler = window.onerror;
    window.onerror = function (
      errorMsg: Event | string,
      currentUrl: string | undefined,
      lineNumber: number | undefined,
      charNumber: number | undefined,
      err: Error | undefined
    ) {
      prevHandler(errorMsg, currentUrl, lineNumber, charNumber, err);
      errHandler(errorMsg, currentUrl, lineNumber, charNumber, err);
    };
  } else {
    window.onerror = errHandler;
  }
  (window as any).__errHandlerRegistered = true;
}
