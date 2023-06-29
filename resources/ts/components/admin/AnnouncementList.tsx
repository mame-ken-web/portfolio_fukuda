import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import { Announcement, getAnnouncements } from '../../api/announcements';

const AnnouncementList: React.FC = () => {
  const [announcements, setAnnouncements] = useState<Announcement[]>([]);

  useEffect(() => {
    const fetchAnnouncements = async () => {
      const fetchedAnnouncements = await getAnnouncements();
      setAnnouncements(fetchedAnnouncements);
    };

    fetchAnnouncements();
  }, []);

  return (
    <div>
      <h1>Announcements</h1>
      {announcements.map((announcement) => (
        <div key={announcement.id}>
          <h2><Link to={`/admin/announcements/${announcement.id}`}>{announcement.title}</Link></h2>
          <p>{announcement.content}</p>
        </div>
      ))}
    </div>
  );
};

export default AnnouncementList;
