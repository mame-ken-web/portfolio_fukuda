import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import { getAnnouncements, Announcement } from '../../api/announcements'


const AnnouncementList: React.FC = () => {
  const [announcements, setAnnouncements] = useState<Announcement[]>([]);

  useEffect(() => {
    const fetchData = async () => {
      const data = await getAnnouncements();
      setAnnouncements(data);
    };
    fetchData();
  }, []);

  return (
    <div>
      {announcements.map((announcement) => (
        <div key={announcement.id}>
          <Link to={`${announcement.id}`}>
            <h2>{announcement.title}</h2>
          </Link>
          <p>{announcement.content}</p>
        </div>
      ))}
    </div>
  );
};

export default AnnouncementList;
