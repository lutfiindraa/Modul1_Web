let currentInput = "";
let history = [];
let isClearMode = false;

const display = document.getElementById("display");
const historyDisplay = document.getElementById("history");


function appendNumber(number) {
  resetIfClearMode();
  currentInput += number;
  updateDisplay();
}


function appendOperator(operator) {
  if (!currentInput) return;
  resetIfClearMode();
  currentInput += ` ${operator} `;
  updateDisplay();
}


function resetIfClearMode() {
  if (isClearMode) {
    currentInput = "";
    isClearMode = false;
  }
}


function calculate() {
  try {
    if (currentInput.includes("^")) {
      handleExponent();
    } else if (currentInput.includes("%")) {
      handleModulus();
    } else {
      currentInput = eval(currentInput).toString();
    }
    currentInput = parseFloat(currentInput)
      .toFixed(5)
      .replace(/\.?0+$/, ""); 
    addToHistory();
  } catch {
    currentInput = "Error";
  }
  updateDisplay();
}


function handleExponent() {
  const [base, exp] = currentInput.split(" ^ ").map(parseFloat);
  currentInput = Math.pow(base, exp)
    .toFixed(5)
    .replace(/\.?0+$/, ""); 
}


function handleModulus() {
  const [num1, num2] = currentInput.split(" % ").map(parseFloat);
  currentInput = (num1 % num2).toFixed(5).replace(/\.?0+$/, ""); 
}


function addToHistory() {
  history.push(currentInput);
  isClearMode = true;
  updateHistory();
}


function updateDisplay() {
  display.textContent = currentInput || "0";
}


function updateHistory() {
  historyDisplay.textContent = history.join(" | ");
}


function clearEntry() {
  currentInput = "";
  updateDisplay();
}


function clearAll() {
  currentInput = "";
  history = [];
  updateDisplay();
  updateHistory();
}


function deleteLast() {
  currentInput = currentInput.slice(0, -1);
  updateDisplay();
}


function handleKeyboardInput(event) {
  const key = event.key;

  if (!isNaN(key)) {
    appendNumber(key); 
  } else if (key === "+") {
    appendOperator("+");
  } else if (key === "-") {
    appendOperator("-");
  } else if (key === "*") {
    appendOperator("*");
  } else if (key === "/") {
    appendOperator("/");
  } else if (key === "%") {
    appendOperator("%");
  } else if (key === "^") {
    appendOperator("^");
  } else if (key === "Enter" || key === "=") {
    calculate(); // Tekan Enter atau '=' untuk menghitung
  } else if (key === "Backspace") {
    deleteLast(); // Tekan Backspace untuk menghapus input terakhir
  } else if (key === "Escape") {
    clearAll(); // Tekan Escape untuk clear all
  } else if (key === "Delete") {
    clearEntry(); // Tekan Delete untuk menghapus input saat ini
  }
}


document.addEventListener("keydown", handleKeyboardInput);
