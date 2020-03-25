import React from 'react';
import ReactDOM from 'react-dom';
import Slider from '@material-ui/core/Slider';
import Header from './Header';
import Drawer from './Drawer';
import Navbar from './Navbar';
import Persistantdrawer from './Persistantdrawer';

function App() {
    const [value, setValue] = React.useState([20, 37]);

    const handleChange = (event, newValue) => {
        setValue(newValue);
    };
    return (
        <div className="container-fluid">
            <Persistantdrawer />
        <div className="container">
            <Navbar />
            <Header />
            <Drawer />       
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an example component!</div>
                        <Slider
                            value={value}
                            onChange={handleChange}
                            valueLabelDisplay="auto"
                            aria-labelledby="range-slider"
                        />
                    </div>
                </div>
            </div>
        </div>
        </div>
    );
}

export default App;

if (document.getElementById('root')) {
    ReactDOM.render(<App />, document.getElementById('root'));
}