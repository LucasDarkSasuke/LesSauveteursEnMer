var typeText = document.querySelector(".typeText");
var textToBeTyped = "Sauveteurs En Mer 1740 - 2021";
var index = 0, isAdding = true;

function playAnim() {
  setTimeout(function () {
    // set the text of typeText to a substring of the text to be typed using index.
    typeText.innerText = textToBeTyped.slice(0, index)
    if (isAdding) {
      // adding text
      if (index > textToBeTyped.length) {
        isAdding = false
        setTimeout(function () {
          playAnim()
        }, 2000)
        return
      } else {
        index++
      }
    } else {
      if (index === 0) {
        // no more text to remove
        isAdding = true
      } else {
        // decrement index by 1
        index--
      }
    }
    // call itself
    playAnim()
  }, 120)
}
// start animation
playAnim()