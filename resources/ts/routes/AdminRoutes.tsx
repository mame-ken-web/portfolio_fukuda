import React from 'react';
import { Routes, Route } from 'react-router-dom';
import AnnouncementForm from '../components/admin/AnnouncementForm';
import AnnouncementList from '../components/admin/AnnouncementList';
import AnnouncementDetail from '../components/admin/AnnouncementDetail';

const AdminRoutes: React.FC = () => {
  return (
    <Routes>
      <Route path="/admin/announcements" element={<AnnouncementList />} />
      <Route path="/admin/announcements/:id" element={<AnnouncementDetail />} />
      <Route path="/admin/create-announcement" element={<AnnouncementForm />} />
    </Routes>
  );
};

export default AdminRoutes;
