import React, { useState } from 'react';
import { createAnnouncement, Announcement } from '../../api/announcements';

const AnnouncementForm: React.FC = () => {
  const [announcement, setAnnouncement] = useState<Announcement>({
    title: '',
    content: '',
    is_urgent: false,
    tag_ids: [],
  });

  const handleSubmit = async (e: React.FormEvent<HTMLFormElement>) => {
    e.preventDefault();
    await createAnnouncement(announcement, announcement.tag_ids);
  };

  const handleInputChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) => {
    setAnnouncement({ ...announcement, [e.target.name]: e.target.value });
  };

  return (
    <form onSubmit={handleSubmit}>
      <input name="title" value={announcement.title} onChange={handleInputChange} />
      <textarea name="content" value={announcement.content} onChange={handleInputChange} />
      <button type="submit">Submit</button>
    </form>
  );
};

export default AnnouncementForm;

