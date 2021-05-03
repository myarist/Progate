import * as ReactDomOriginal from 'react-dom-original'

const ReactDOM = {
  ...ReactDomOriginal,

  render: (reactNode, domNode, callback) => {
    if (domNode.id === 'root') {
      return ReactDomOriginal.render(reactNode, domNode, callback)
    }

    return ReactDomOriginal.render(
      <div id='root'>
        {reactNode}
      </div>,
      domNode,
      callback
    )
  },
}

export default ReactDOM
