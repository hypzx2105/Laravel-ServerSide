/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

document.addEventListener("DOMContentLoaded", function () {
  var images = ["/images/panama1.jpg", "/images/panama2.jpg", "/images/panama3.webp", "/images/panama4.jpg"];
  var currentIndex = 0;
  var slider = document.getElementById("imageSlider");
  var prevBtn = document.getElementById("prevBtn");
  var nextBtn = document.getElementById("nextBtn");
  function updateSlider() {
    slider.style.backgroundImage = "url(".concat(images[currentIndex], ")");
  }
  prevBtn.addEventListener("click", function () {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateSlider();
  });
  nextBtn.addEventListener("click", function () {
    currentIndex = (currentIndex + 1) % images.length;
    updateSlider();
  });
  setInterval(function () {
    currentIndex = (currentIndex + 1) % images.length;
    updateSlider();
  }, 4000);
  updateSlider();
});

/***/ }),

/***/ "./resources/scss/app.scss":
/*!*********************************!*\
  !*** ./resources/scss/app.scss ***!
  \*********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Can't find stylesheet to import.\n  ╷\n1 │ @import \"tailwindcss/base\";\n  │         ^^^^^^^^^^^^^^^^^^\n  ╵\n  resources\\scss\\app.scss 1:9  root stylesheet\n    at processResult (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\webpack\\lib\\NormalModule.js:891:19)\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\webpack\\lib\\NormalModule.js:1037:5\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\loader-runner\\lib\\LoaderRunner.js:400:11\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\loader-runner\\lib\\LoaderRunner.js:252:18\n    at context.callback (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass-loader\\dist\\index.js:49:7\n    at Function.call$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:127083:16)\n    at render_closure1.call$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:108227:12)\n    at _RootZone.runBinary$3$3 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:39769:18)\n    at _FutureListener.handleError$1 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38257:21)\n    at _Future__propagateToListeners_handleError.call$0 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38600:49)\n    at Object._Future__propagateToListeners (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5261:77)\n    at _Future._completeError$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38433:9)\n    at _AsyncAwaitCompleter.completeError$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38027:12)\n    at Object._asyncRethrow (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5028:17)\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:28615:20\n    at _wrapJsFunctionForAsync_closure.$protected (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5053:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38046:12)\n    at _awaitOnObject_closure0.call$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38040:25)\n    at _RootZone.runBinary$3$3 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:39769:18)\n    at _FutureListener.handleError$1 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38257:21)\n    at _Future__propagateToListeners_handleError.call$0 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38600:49)\n    at Object._Future__propagateToListeners (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5261:77)\n    at _Future._completeError$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38433:9)\n    at _AsyncAwaitCompleter.completeError$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38027:12)\n    at Object._asyncRethrow (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5028:17)\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:20692:20\n    at _wrapJsFunctionForAsync_closure.$protected (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5053:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38046:12)\n    at _awaitOnObject_closure0.call$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38040:25)\n    at _RootZone.runBinary$3$3 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:39769:18)\n    at _FutureListener.handleError$1 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38257:21)\n    at _Future__propagateToListeners_handleError.call$0 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38600:49)\n    at Object._Future__propagateToListeners (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5261:77)\n    at _Future._completeError$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38433:9)\n    at _AsyncAwaitCompleter.completeError$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38027:12)\n    at Object._asyncRethrow (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5028:17)\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:20737:20\n    at _wrapJsFunctionForAsync_closure.$protected (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5053:15)\n    at _wrapJsFunctionForAsync_closure.call$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38046:12)\n    at _awaitOnObject_closure0.call$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38040:25)\n    at _RootZone.runBinary$3$3 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:39769:18)\n    at _FutureListener.handleError$1 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38257:21)\n    at _Future__propagateToListeners_handleError.call$0 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38600:49)\n    at Object._Future__propagateToListeners (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5261:77)\n    at _Future._completeError$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38433:9)\n    at _AsyncAwaitCompleter.completeError$2 (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:38027:12)\n    at Object._asyncRethrow (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5028:17)\n    at C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:86102:24\n    at _wrapJsFunctionForAsync_closure.$protected (C:\\Users\\elias\\ServerSide Projects\\Laravel-ServerSide\\node_modules\\sass\\sass.dart.js:5053:15)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_modules__["./resources/js/app.js"]();
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/scss/app.scss"]();
/******/ 	
/******/ })()
;