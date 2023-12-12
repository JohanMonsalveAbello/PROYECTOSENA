import { useState } from 'react';
import ReactPlayer from 'react-player';
import './App.css'; // Asegúrate de tener la ruta correcta a tu archivo CSS

function SearchableVideoList({ videos }) {
  const [searchText, setSearchText] = useState('');
  const [selectedVideo, setSelectedVideo] = useState(null);

  const filteredVideos = videos.filter(video =>
    video.title.toLowerCase().includes(searchText.toLowerCase())
  );

  const playVideo = (videoUrl) => {
    setSelectedVideo(videoUrl);
  };

  const handleSearch = () => {
    // Lógica para manejar la búsqueda
  };

  return (
    
    <div className="container">
    
      <div className="video-container">
        <div className="search-area">
          <input
            type="text"
            className="search-input"
            value={searchText}
            onChange={(e) => setSearchText(e.target.value)}
            placeholder="Search videos"
          />
          <button className="search-button" onClick={handleSearch}>
            Search
          </button>
          
        </div>
        <br />
        <div className="video-list">
          {filteredVideos.map((video, index) => (
            <div key={index} className="video-item">
              <div className="video-player">
                <ReactPlayer
                  url={video.url}
                  controls
                  width="200px"
                  height="150px"
                />
              </div>
              <div className="video-details">
                <h3>{video.title}</h3>
                <p>{video.description}</p>
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
}

export default SearchableVideoList;

