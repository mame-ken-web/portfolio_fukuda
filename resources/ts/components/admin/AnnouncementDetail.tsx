import React, { useState, useEffect } from 'react';
import { useNavigate, useParams } from 'react-router-dom';
import { Announcement, getAnnouncement, Tag, getTags, deleteAnnouncement } from '../../api/announcements'; 


const AnnouncementDetail: React.FC = () => {
  const [announcement, setAnnouncement] = useState<Announcement | null>(null);
  const { id } = useParams();
  const navigate = useNavigate();
  const [tags , setTags] = useState<Tag[]>([]);

  useEffect(() => {
    const fetchAnnouncement = async () => {
      const fetchedAnnouncement = await getAnnouncement(id);
      setAnnouncement(fetchedAnnouncement);

      
      const tagData = await getTags();
      setTags(tagData);
      
    };

    fetchAnnouncement();
  }, [id]);

  const handleDelete = async () => {
    await deleteAnnouncement(id);
    navigate('/admin/announcements');
  };

  if (!announcement) {
    return null;
  }

  return (
    <div>
      <h1>{announcement.title}</h1>
      <p>{announcement.content}</p>
      <div>
        <h3>Tags:</h3>
        <ul>
          {announcement.tag_ids.map(tagId => {
            const tag = tags.find(t => t.id === tagId);
            return <li key={tagId}>{tag ? tag.name : 'Loading...'}</li>;
          })}
        </ul>
      </div>
      <button onClick={handleDelete}>Delete</button>
    </div>
  );
};

export default AnnouncementDetail;
