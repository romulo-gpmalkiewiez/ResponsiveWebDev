const DISPLAY_MAX_CHARS = 16;

const CALC_CLASSNAMES = Object.freeze({
  CONTAINER: 'calculator',
  DISPLAY: 'calculator-display',
  BUTTONS_WRAPPER: 'calculator-buttons-wrapper',
  BUTTON: 'calculator-button',
  BUTTON_NUMBER: 'calculator-button--number',
  BUTTON_BACKSPACE: 'calculator-button--backspace',
  ICONS: Object.freeze({
    BACKSPACE: 'icon icon-backspace',
  }),
});

function CalculatorFactory() {
  this.create = function () {
    return new Calculator().getElement();
  }
}

class Calculator {
  element;
  display;
  buttons = [];

  constructor() {
    this.init();
  }

  init() {
    this.createContainer();
    this.createDisplay();
    this.createButtonsWrapper();
    this.createButtons();
    this.attachDOMEventListeners();
  }
  
  getElement() {
    return this.element;
  }

  createContainer() {
    this.element = document.createElement('div');
    this.element.classList.add(CALC_CLASSNAMES.CONTAINER);
  }

  createDisplay() {
    this.displayInput = document.createElement('input');
    this.displayInput.value = 0;
    this.displayInput.type = 'text';
    this.displayInput.readOnly = true;

    this.display = document.createElement('div');
    this.display.classList.add(CALC_CLASSNAMES.DISPLAY);
    this.display.append(this.displayInput);

    this.element.append(this.display);
  }

  createButton(content, actionKey, actionCallback) {
    const isNumber = !isNaN(parseInt(content));

    const button = document.createElement('div');
    button.classList.add(CALC_CLASSNAMES.BUTTON);
    button.classList.toggle(CALC_CLASSNAMES.BUTTON_NUMBER, isNumber);
    button.append(content);

    this.buttons.push(button);
    this.buttonsWrapper.append(button);

    this.attachButtonClickListener(button, content, actionKey, actionCallback);
  }

  createButtonsWrapper() {
    const buttonsWrapper = document.createElement('div');
    buttonsWrapper.classList.add(CALC_CLASSNAMES.BUTTONS_WRAPPER);

    this.buttonsWrapper = buttonsWrapper;
    this.element.append(buttonsWrapper);
  }

  createButtons() {
    const backspaceIcon = this.createIcon(CALC_CLASSNAMES.ICONS.BACKSPACE);

    this.createButton('CE', 'Clear');
    this.createButton('C', 'Clear');
    this.createButton(backspaceIcon, "Backspace");
    this.createButton('÷', '/');
    this.createButton('7');
    this.createButton('8');
    this.createButton('9');
    this.createButton('x', "*");
    this.createButton('4');
    this.createButton('5');
    this.createButton('6');
    this.createButton('-');
    this.createButton('1');
    this.createButton('2');
    this.createButton('3');
    this.createButton('+');
    this.createButton('+/-');
    this.createButton('0');
    this.createButton('.');
    this.createButton('=', "Equal");
  }

  createIcon(iconClassName) {
    const icon = document.createElement('i');
    const iconClassNames = iconClassName?.split(new RegExp(',| '));
    icon.classList.add(...iconClassNames);
    return icon;
  }

  handleKeyAdd(key) {
    const { value } = this.displayInput;
    const isEmpty = !value || value === '0';

    if (isEmpty) {
      this.displayInput.value = key
    } else if (value.length < DISPLAY_MAX_CHARS) {
      this.displayInput.value += key;
    }
  }

  handleCalculate() {
    const { value } = this.displayInput;

    try {
      const result = eval(value);

      if (typeof result !== 'number') {
        throw new Error('Invalid entry.');
      }

      this.displayInput.value = result;
    } catch {
      this.displayInput.value = 'Error';
    }

  }

  handleClear() {
    this.displayInput.value = '0';
  }

  handleBackspace() {
    const { displayInput } = this;
    const { value } = displayInput;

    if (value.length === 1) {
      return this.handleClear();
    }

    displayInput.value = value.slice(0, value.length - 1);
  }

  handleKeyDown(keyboardEvent) {
    const { key, ctrlKey } = keyboardEvent;
    const isNum = !isNaN(parseInt(key));
    const isOpr = ['+', '-', '/', '*'].includes(key);
    const isDot = key === '.';

    switch (key) {
      case "Equal":
      case "Enter":
        this.handleCalculate();
        break;
      case "Backspace":
        if (ctrlKey) {
          this.handleClear();
        } else {
          this.handleBackspace();
        }
        break;
      case "Clear":
          this.handleClear();
          break;
      default:
        if (isNum || isOpr || isDot) {
          this.handleKeyAdd(key);
        }
        break;
    }
  }

  attachDOMEventListeners() {
    document.addEventListener('keydown', (e) => this.handleKeyDown(e));
  }

  attachButtonClickListener(element, content, actionKey, actionCallback) {
    element.addEventListener('click', () => {
      if (actionCallback && !actionKey) {
        actionCallback();
      } else {
        this.handleKeyDown({ key: actionKey || content })
      }
    });
  }

  destroy() {}

}
