import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import RecipesList from './RecipesList'

class App extends Component {
  render () {
    return (
      <BrowserRouter>
        <div>
          <RecipesList />
        </div>
      </BrowserRouter>
    )
  }
}

ReactDOM.render(<App />, document.getElementById('app'))
