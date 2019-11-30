import React from 'react'
import ReactDOM from 'react-dom'
import './css/styles.css'

function App() {
  return (
    <div className='p-12 h-screen font-medium bg-green-700 text-center text-5xl text-gray-200'>
      React App With Symfony
    </div>
  )
}

ReactDOM.render(<App />, document.getElementById('root'))
