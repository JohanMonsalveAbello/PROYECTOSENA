import React from 'react';
import './App.css'; // Si tienes un archivo de estilos CSS, asegúrate de importarlo aquí
import SearchableVideoList from './SearchableVideoList';

const videos = [
  {
    title: 'Cual Es esa',
    url: 'https://www.youtube.com/watch?v=b3LSVDQPbxU&ab_channel=FeidVEVO',
    description: 'Music video by Feid, Pirlo performing CUAL ES ESA (Animated). Universal Music Latino; © 2023 UMG Recordings, Inc.'
  },
  {
    title: 'Ferxxo 30',
    url: 'https://www.youtube.com/watch?v=lixcxBrXR2w&ab_channel=FeidVEVO',
    description: 'Music video by Feid'
  },
  {
    title: 'Rara vez',
    url: 'https://www.youtube.com/watch?v=aBSkvI0CkgU&ab_channel=TaiuVEVO',
    description: 'MMILO J'
  },
  {
    title: ' MINIMO ESFUERZO',
    url: 'https://www.youtube.com/watch?v=_PxiQoZmSjw&ab_channel=PabloChill-E',
    description: 'asdasdasdasd'
  },
];

function App() {
  return (
    <div className="App">
      <h1 className='title'>Lista de Videos</h1>
      <SearchableVideoList videos={videos} />
    </div>
  );
}

export default App;

