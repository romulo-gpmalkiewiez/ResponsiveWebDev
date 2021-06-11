window.onload = function() {
  const appContent = document.querySelector('.app-content');
  const calculator = new CalculatorFactory().create();

  appContent.append(calculator);
}
