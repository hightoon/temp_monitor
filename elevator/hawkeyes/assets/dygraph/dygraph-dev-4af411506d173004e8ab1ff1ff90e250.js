(function(){var a=document.getElementsByTagName("script"),a=a[a.length-1].getAttribute("src"),b=/^(.*)\/[^/]*\.js/.exec(a);if(b)for(var a=b[1],b="strftime/strftime-min.js rgbcolor/rgbcolor.js dygraph-layout.js dygraph-canvas.js dygraph.js dygraph-utils.js dygraph-gviz.js dygraph-interaction-model.js dygraph-options-reference.js".split(" "),c=0;c<b.length;c++)document.write('<script type="text/javascript" src="'+a+"/"+b[c]+'">\x3c/script>\n');else console.error("Can't grok dygraph-dev.js path: "+a)})();