import React, { useEffect } from 'react';
import axios from 'axios';

const App: React.FC = () => {

    
        useEffect(()=>{
            const fetchUser = async () => {
                await axios.get('/sanctum/csrf-cookie');
                const res  = await axios.get(`/api/user`);
                alert(res.data.name)
            };
            fetchUser();
        }, [])
    
        return (
            <div className="App"></div>
        );
        
    };

export default App;