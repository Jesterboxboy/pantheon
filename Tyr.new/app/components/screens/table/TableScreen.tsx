import * as React from "react";
import {IComponentProps} from '#/components/IComponentProps';
import {
  getOutcomeModalInfo, getPlayerBottomInfo,
  getPlayerLeftInfo,
  getPlayerRightInfo,
  getPlayerTopInfo, getBottomPanel, getArrowsInfo, getTableInfo,
} from '#/components/screens/table/TableHelper';
import {TableScreenStateless} from '#/components/screens/table/base/TableScreenStateless';
import {GET_CHANGES_OVERVIEW_INIT} from '#/store/actions/interfaces';

export class TableScreen extends React.Component<IComponentProps> {
  componentDidMount() {
    const {state, dispatch} = this.props;
    if (state.currentScreen === 'confirmation') {
      dispatch({ type: GET_CHANGES_OVERVIEW_INIT, payload: state });
    }
  }

  render() {
    const {state, dispatch} = this.props;
    if (!state.players || state.players.length !== 4) {
      return null
    }

    const topPlayerInfo = getPlayerTopInfo(state, dispatch)
    const leftPlayerInfo = getPlayerLeftInfo(state, dispatch)
    const rightPlayerInfo = getPlayerRightInfo(state, dispatch)
    const bottomPlayerInfo = getPlayerBottomInfo(state, dispatch)

    const tableInfo = getTableInfo(state);

    const outcomeModalInfo = getOutcomeModalInfo(state, dispatch)
    const buttonPanelInfo = getBottomPanel(state, dispatch)

    const arrowsInfo = getArrowsInfo(state)

    return (
      <TableScreenStateless
        topPlayer={topPlayerInfo}
        leftPlayer={leftPlayerInfo}
        rightPlayer={rightPlayerInfo}
        bottomPlayer={bottomPlayerInfo}
        tableInfo={tableInfo}
        arrowsInfo={arrowsInfo}
        outcomeModal={outcomeModalInfo}
        bottomPanel={buttonPanelInfo}
      />
    );
  }
}
