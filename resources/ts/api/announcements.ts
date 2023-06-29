import axios from 'axios';
import { instance } from './axiosInstance';

export type Announcement = {
  id?: string;
  title: string;
  content: string;
  is_urgent: boolean;
  tag_ids: number[];
};

export type Tag = {
  id: number;
  name: string;
};

export const getAnnouncements = async (): Promise<Announcement[]> => {
  try {
    const response = await instance.get('/announcements');
    return response.data;
  } catch (error) {
    console.error(error);
    throw error;
  }
};

export const getAnnouncement = async (id: string): Promise<Announcement> => {
  try {
    const response = await instance.get(`/announcements/${id}`);
    return response.data;
  } catch (error) {
    console.error(error);
    throw error;
  }
};

export const createAnnouncement = async (announcement: Partial<Announcement>, tagIds: number[]): Promise<Announcement> => {
  try {
    const response = await instance.post('/announcements', { ...announcement, tag_ids: tagIds });
    return response.data;
  } catch (error) {
    console.error(error);
    throw error;
  }
};


export const deleteAnnouncement = async (id: string): Promise<void> => {
  try {
    await instance.delete(`/announcements/${id}`);
  } catch (error) {
    console.error(error);
    throw error;
  }
};

export const getTags = async (): Promise<Tag[]> => {
  try {
    const response = await instance.get('/tags');
    return response.data;
  } catch (error) {
    console.error(error);
    throw error;
  }
}