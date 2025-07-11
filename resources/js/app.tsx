import React from 'react';
import ReactDOM from 'react-dom/client';
import ResizableTable from './components/ResizableTable';

const root = document.getElementById('app');

if (root) {
  console.log("✅ React mounted!");
  ReactDOM.createRoot(root).render(
    <React.StrictMode>
      <ResizableTable />
    </React.StrictMode>
  );
} else {
  console.error("❌ #app not found!");
}