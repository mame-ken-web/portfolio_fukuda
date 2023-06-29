import React, { useEffect, useState } from 'react';
import { useParams } from 'react-router-dom';
import { Announcement, getAnnouncement, Tag, getTags } from '../../api/announcements'; 

type ParamTypes = {
  id: string;
};

const AnnouncementDetail: React.FC = () => {
  const [announcement, setAnnouncement] = useState<Announcement | null>(null);
  const { id } = useParams<ParamTypes>();
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

  if (!announcement) return null;

  return (
    <div>
    {announcement && (  
      <>
        <h2>{announcement.title}</h2>
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
      </>
    )}
  </div>

  );
};

export default AnnouncementDetail;
