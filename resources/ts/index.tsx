import React from 'react';
import './bootstrap';
import App from './App';

import Alpine from 'alpinejs';
import { createRoot } from 'react-dom/client';

window.Alpine = Alpine;

Alpine.start();

const container = document.getElementById('app');
const root = createRoot(container!); // createRoot(container!) if you use TypeScript

root.render(
  // <React.StrictMode>
    <div className="text-red">
        <App />
    </div>
// </React.StrictMode>,
);