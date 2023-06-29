import React from 'react';
import { Routes, Route } from 'react-router-dom';
import AnnouncementList from '../components/user/AnnouncementList';
import AnnouncementDetail from '../components/user/AnnouncementDetail';

const UserRoutes: React.FC = () => {
  return (
    <Routes>
      <Route path="/announcements" element={<AnnouncementList />} />
      <Route path="/announcements/:id" element={<AnnouncementDetail />} />
    </Routes>
  );
};

export default UserRoutes;
