import React from 'react';
import ReactDOM from 'react-dom/client';
import App from './App/App';

/**
 * Allow Bootstrap to load
 * Note: In some situation where we have some external resources to load
 * like a CDN library (example bootstrap etc..) we can wait them to load this way
 * and then initialize React
 */
window.addEventListener('DOMContentLoaded', (event) => {
    const root = ReactDOM.createRoot(
        document.getElementById('root') as HTMLElement
    );
    root.render(
        <React.StrictMode>
            <App />
        </React.StrictMode>
    );

});
