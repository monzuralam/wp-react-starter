import React from 'react'
import ReactDOM from 'react-dom/client'
import App from './Admin/App'

const element = document.getElementById('wp-react-starter');

if (element) {
  ReactDOM.createRoot(element).render(
    <React.StrictMode>
      <App />
    </React.StrictMode>
  );
}