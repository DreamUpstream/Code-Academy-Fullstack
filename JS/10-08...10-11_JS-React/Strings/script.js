'use strict';

const e = React.createElement;

class App extends Component {
  constructor() {
    this.state = {
      textLength: 0,
      text: '',
    }
  }
  textLengthHandler = (event) => {
    let length = 0;
    const text = event.target.value;
    if (event) {
      length = text.length
    };
    console.log("length is " + length);
    this.setState({
      textLength: length,
      text: text,
    });
  }

  render() {
    return (
      <div className="App">
        <input type='text' onChange={this.textLengthHandler} value={this.state.text}/>
        <p>length is {this.state.textLength}</p>
      </div>
    );
  }
}

const domContainer = document.querySelector('#like_button_container');
ReactDOM.render(e(App), domContainer);