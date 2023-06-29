import axios from 'axios';
import { instance } from './axiosInstance';


export const getCsrfCookie = async () => {
  try {
    const response = await axios.get('/sanctum/csrf-cookie');
    return response.data;
  } catch (error) {
    console.error(error);
  }
};

export type UserType = 'admins' | 'users' | null;

export const getCurrentUser = async () => {
  try {
    const response = await instance.get('/user-type');
    console.log(response.data);
    return response.data;

        
  } catch (error) {
    console.error(error);
  }
};
