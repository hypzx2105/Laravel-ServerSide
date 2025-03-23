/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: expected \"{\".\n  ╷\n1 │ import api from \"!../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js\";\n  │                                                                                            ^\n  ╵\n  resources\\css\\app.css 1:92  root stylesheet\n    at processResult (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\webpack\\lib\\NormalModule.js:891:19)\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\webpack\\lib\\NormalModule.js:1037:5\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\loader-runner\\lib\\LoaderRunner.js:400:11\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\loader-runner\\lib\\LoaderRunner.js:252:18\n    at context.callback (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass-loader\\dist\\index.js:49:7\n    at Function.call$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:127083:16)\n    at render_closure1.call$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:108227:12)\n    at _RootZone.runBinary$3$3 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:39769:18)\n    at _FutureListener.handleError$1 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38257:21)\n    at _Future__propagateToListeners_handleError.call$0 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38600:49)\n    at Object._Future__propagateToListeners (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5261:77)\n    at _Future._completeError$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38433:9)\n    at _AsyncAwaitCompleter.completeError$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38027:12)\n    at Object._asyncRethrow (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5028:17)\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:28615:20\n    at _wrapJsFunctionForAsync_closure.$protected (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5053:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38046:12)\n    at _awaitOnObject_closure0.call$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38040:25)\n    at _RootZone.runBinary$3$3 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:39769:18)\n    at _FutureListener.handleError$1 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38257:21)\n    at _Future__propagateToListeners_handleError.call$0 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38600:49)\n    at Object._Future__propagateToListeners (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5261:77)\n    at _Future._completeError$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38433:9)\n    at _Future__asyncCompleteError_closure.call$0 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38512:18)\n    at Object._microtaskLoop (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5317:24)\n    at StaticClosure._startMicrotaskLoop (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5323:11)\n    at _AsyncRun__scheduleImmediateJsOverride_internalCallback.call$0 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:37947:21)\n    at process.processImmediate (node:internal/timers:491:21)");

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  console.log("✅ JavaScript Loaded!");
  var buttons = document.querySelectorAll(".favorite-btn");
  buttons.forEach(function (button) {
    button.addEventListener("click", function () {
      var destinationId = this.getAttribute("data-id");
      var buttonEl = this;
      fetch("/toggle-favorite", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
        },
        body: JSON.stringify({
          destination_id: destinationId
        })
      }).then(function (res) {
        return res.json();
      }).then(function (data) {
        if (data.success) {
          var isFavorite = data.favorites.includes(parseInt(destinationId));
          buttonEl.textContent = isFavorite ? "Remove from Favorites" : "Add to Favorites";
        }
      })["catch"](function (err) {
        return console.error("Error toggling favorite:", err);
      });
    });
  });
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./resources/js/app.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/css/app.css"]();
/******/ 	
/******/ })()
;