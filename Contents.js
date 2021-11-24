import { useState, useEffect } from 'react'
import { Bar, Doughnut, Line } from "react-chartjs-2"
import axios from 'axios'

const Contents = () => {


    const [confirmedData, setConfirmedData] = useState({})
    const [quarantinedData, setConfirmedData]  = useState({})
    const [comparedData, setComparedData]  = useState({})
    useEffect(()=> {

        const fetchEvents = async ()=> {
            const res = await axios.get("https://api.covid19api.com/total/dayone/country/kr") // await을 통해 데이터를 다 받아오면 동기화
            makeDate(res.data)

        }
        const makeDate = (items) => {
            const arr = items.reduce((acc, cur) => {
                const currentDate = new Date(cur.Date);
                const year = currentDate.getFullYear();
                const month = currentDate.getMonth();
                const date = currentDate.getDate();
                const confirmed = cur.Confirmed;
                const active = cur.Active;
                const death = cur.Deaths;
                const recoverd = cur.Recovered;

                const findItem = acc.find(a=> a.year === year && a.month === month);

               if(!findItem){
                   acc.push({year, month, date, confirmed, active, recoverd})
               }
                if(findItem && findItem.date < date){
                    findItem.active = active;
                    findItem.death = death;
                    findItem.date = date;
                    findItem.year = year;
                    findItem.month = month;
                    findItem.recoverd = recoverd;
                    findItem.confirmed = confirmed;
                }

                return acc;

            }, [])

          

            const labels = arr.map(a=> `${a.month+1}월`);

            setConfirmedData({
                labels: ["1월", "2월", "3월"],
                datasets: [
                    {
                        label: "국내 누적 확진자",
                        backgroundColor: "salmon",
                        fill: true,
                        data: arr.map(a=>a.confirmed)
                    },
                ]

            });

            setQuarantinedData({
                labels,
                datasets: [
                    {
                        label: "월별 격리자 현황",
                        borderColor: "salmon",
                        fill: true,
                        data: arr.map(a=>a.active)
                    },
                ]

            });
            const last = arr[arr.length -1];
            setComparedData({
                labels: ["확진자", "격리해제", "사망"],
                datasets: [
                    {
                        label: "월별 격리자 현황",
                       
                        fill: true,
                        data: [last.confirmed, last.recovered, last.death]
                    },
                ]

            });

        }

        fetchEvents();
    }, [])

    return (
        <section>
            <h2>국내 코로나 현황</h2>
            <div className="contents">
                <div>
                    <Bar data ={confirmedData} options = {
                        {title:{ display: true, text: "누적 환진자 추이", fontSize : 16}},
                        {legend: {display: true, position: "bottom"}}
                    } />
                    </div>
                    <div>
                    <Line data ={quarantinedData} options = {
                        {title:{ display: true, text: "월별 격리자 현황", fontSize : 16}},
                        {legend: {display: true, position: "bottom"}}
                    } />
                    </div>
                    <div>
                    <Doughnut data ={comparedData} options = {
                        {title:{ display: true, text: `누적 확진, 해제, 사망 (${new Date().getMonth()+1}월)`, fontSize : 16}},
                        {legend: {display: true, position: "bottom"}}
                    } />
                    </div>
            </div>

        </section>
    )
}

export default Contents
