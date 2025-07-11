import React, { useEffect, useRef, useState } from 'react';

interface Student {
  lastname: string;
  firstname: string;
  middlename: string;
  section: string;
  specialization: string;
}

const ResizableTable: React.FC = () => {
  const tableRef = useRef<HTMLTableElement>(null);
  const [students, setStudents] = useState<Student[]>([]);

useEffect(() => {
  fetch("http://127.0.0.1:8000/api/students")
    .then((res) => {
      if (!res.ok) {
        throw new Error(`HTTP error! Status: ${res.status}`);
      }
      return res.json();
    })
    .then((data) => {
      console.log("Fetched data:", data);
      setStudents(data);
    })
    .catch((err) => console.error("Fetch error:", err.message));
}, []);



  useEffect(() => {
    const table = tableRef.current;
    if (!table) return;

    const headers = table.querySelectorAll('th');

    headers.forEach((th) => {
      const resizer = document.createElement('div');
      resizer.className = 'resizer';
      Object.assign(resizer.style, {
        position: 'absolute',
        top: '0',
        right: '0',
        width: '5px',
        height: '100%',
        cursor: 'col-resize',
        userSelect: 'none',
      });
      th.style.position = 'relative';
      th.appendChild(resizer);

      resizer.addEventListener('mousedown', (e) => {
        const startX = e.clientX;
        const startWidth = th.offsetWidth;

        const onMouseMove = (e: MouseEvent) => {
          const newWidth = startWidth + (e.clientX - startX);
          th.style.width = `${newWidth}px`;
        };

        const onMouseUp = () => {
          document.removeEventListener('mousemove', onMouseMove);
          document.removeEventListener('mouseup', onMouseUp);
        };

        document.addEventListener('mousemove', onMouseMove);
        document.addEventListener('mouseup', onMouseUp);
      });
    });
  }, [students]); // re-run if students change

  return (
    <div className="overflow-auto p-4 bg-white rounded shadow-md">
      <table ref={tableRef} className="table-auto w-full border-collapse text-sm text-left">
        <thead className="bg-gray-200">
          <tr>
            <th className="border px-4 py-2">Last Name</th>
            <th className="border px-4 py-2">First Name</th>
            <th className="border px-4 py-2">Middle Name</th>
            <th className="border px-4 py-2">Section</th>
            <th className="border px-4 py-2">Specialization</th>
          </tr>
        </thead>
        <tbody>
          {students.map((s, i) => (
            <tr key={i} className="hover:bg-gray-100">
              <td className="border px-4 py-2">{s.lastname}</td>
              <td className="border px-4 py-2">{s.firstname}</td>
              <td className="border px-4 py-2">{s.middlename}</td>
              <td className="border px-4 py-2">{s.section}</td>
              <td className="border px-4 py-2">{s.specialization}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};

export default ResizableTable;
