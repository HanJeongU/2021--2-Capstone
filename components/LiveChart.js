import { useState, useEffect } from 'react'
import { Bar, Doughnut, Line } from "react-chartjs-2"
import axios from 'axios'


const LiveChart = () => {
    const [countryInfo, setCountryInfo] = useState([]);
   
    // https://disease.sh/v3/covid-19/countries
    useEffect(() => {
      fetch("https://disease.sh/v3/covid-19/countries/kr")
        .then((response) => response.json())
        .then((data) =>setCountryInfo(data));
    }, []);
  
    return (
    //   <ul className='infoBox'>
    //       <li>
    //           <h3 className='확진자'>
    //             <span>확진자</span>
    //             </h3>
    //             <div className='today'>
    //                 <span> {countryInfo.todayCases}</span>
    //             </div>
    //             <div className='total'>
    //                 <span>{countryInfo.cases}</span>

    //             </div>

    //       </li>
    //       <li>
    //           <h3 className='확진자'>
    //             <span>확진자</span>
    //             </h3>
    //             <div className='today'>
    //                 <span> {countryInfo.todayCases}</span>
    //             </div>
    //             <div className='total'>
    //                 <span>{countryInfo.cases}</span>

    //             </div>

    //       </li>
    //       <li>
    //           <h3 className='확진자'>
    //             <span>확진자</span>
    //             </h3>
    //             <div className='today'>
    //                 <span> {countryInfo.todayCases}</span>
    //             </div>
    //             <div className='total'>
    //                 <span>{countryInfo.cases}</span>

    //             </div>

    //       </li>

    //   </ul>


    
//     <div>
      
//         <h3>Today COVID 19현황</h3>
// <table class="type11">
    
//       <thead>
//       <tr>
//             <th scope="cols">일일 확진자</th>
//             <th scope="cols">일일 완치자</th>
//             <th scope="cols">일일 사망자</th>
//       </tr>
//       </thead>
//       <tbody>
//       <tr>
//             <td>{countryInfo.todayCases}
//             </td><td>{countryInfo.todayRecovered}
//             </td><td>{countryInfo.todayDeaths}
//       </td></tr>
     
//       </tbody>
// </table>
// </div>

       <div className="tableArea">
          <h3>국내 Today COVID19 현황</h3>
          <div className="row">
          <span>일일 확진자 : </span>
          <span>{countryInfo.todayCases} | </span>
          <span>일일 완치자 : </span> 
            <span>{countryInfo.todayRecovered} | </span> <br></br>
            <span>일일 사망자 : </span>
            <span>{countryInfo.todayDeaths}</span>
          </div>
         
        </div> 
      
    );
  }

  export default LiveChart