import React, { useEffect, useState } from 'react';
import { BrowserRouter as Router, Route, Routes } from 'react-router-dom';
import { getCsrfCookie } from './api/auth';
import { UserType, getCurrentUser } from './api/auth';
import AdminRoutes from './routes/AdminRoutes';
import UserRoutes from './routes/UserRoutes';

const App: React.FC = () => {
  const [UserType, setUserType] = useState<UserType | null>(null);

  useEffect(() => {
    const fetchUser = async () => {
      await getCsrfCookie();
      const user = await getCurrentUser();
      setUserType(user?.type || null);
    };

    fetchUser();
  }, []);

  return (
    // <Router>
    //   <Routes>
    //     {userType === 'admin' && <Route path="/admin/*" element={<AdminRoutes />} />}
    //     {userType === 'user' && <Route path="/user*" element={<UserRoutes />} />}
    //     {userType === null && <p>Loading...</p>}
    //   </Routes>
    // </Router>
   <div>test</div>
  );
};

export default App;


