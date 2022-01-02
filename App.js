import logo from './logo.svg';
import './App.css';
import Header from './components/Header'
import Contents from './components/Contents'
import LiveChart from './components/LiveChart'


function App() {
  return (
    <div className="App">
     <Header />
     <LiveChart/>
     <Contents />
    
  
    </div>
  );
}

export default App;
