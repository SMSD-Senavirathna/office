
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Employee  from './components/Employee';
import 'bootstrap/dist/css/bootstrap.min.css';


function App() {
 return (
  /*
    <div className="App">
        <Employee />
    </div> */
  

    <BrowserRouter>
    <Routes>
      <Route path="/" element={<Employee/>} />  
    </Routes>
    </BrowserRouter>
  ); 


}

export default App;