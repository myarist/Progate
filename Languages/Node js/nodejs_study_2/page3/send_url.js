window.addEventListener('load', function(){
  sendMessage()
  addQuery()
})

function sendMessage() {
  var bodyWidth = document.getElementsByTagName('body')[0].scrollWidth
  window.parent.postMessage({ pathname: window.location.pathname, query: window.location.search, width: bodyWidth }, '*')
}

function addQuery() {
  var aTags = document.getElementsByTagName('a')
  for (var i = 0 ; i < aTags.length ; i++) {
    var aTag = aTags[i]
    url = aTag.getAttribute('href')
    aTag.setAttribute('href', getUrlWithQuery(url))
  }
  var formTags = document.getElementsByTagName('form')
  for (var i = 0 ; i < formTags.length ; i++) {
    var formTag = formTags[i]
    var url = formTag.getAttribute('action')
    formTag.setAttribute('action', getUrlWithQuery(url))
  }
}

function getUrlWithQuery(url) {
  var query = 'containerPort=3000&languageName=nodejs'

  // ブラウザバック等による多重付加対策
  var parser = document.createElement('a')
  parser.href = url
  if (parser.search.match(/containerPort|languageName/)) {
    return url
  }

  return url.match(/\?/) ? `${url}&${query}` : `${url}?${query}`
}
