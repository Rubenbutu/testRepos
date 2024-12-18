import { useIncrement } from "./assets/hooks/useIncrement"
import { useFetch } from "./assets/hooks/useFetch"

function MyApp(){
    const {count, increment, decrement}=useIncrement(0,10,0)
   const{loading,data, errors}=useFetch('https://jsonplaceholder.typicode.com/posts?_limit=10&_delay=2000')
//    const{loading,data, errors}=useFetch('http://127.0.0.1:8000/api/alert?_delay=2000')
   return <div>
        compteur: {count}
        <button onClick={increment}>Incrémenter</button>
        <button onClick={decrement}>Décrémenter</button>
    <hr />
    {loading && <div>chargement...</div>}
    {errors && <div>{errors.toString()}</div>}
    {data && <div>
        <ul>
            {/* {data.map(post=>(<li key={id}>{latitude}</li>))} */}
        </ul>
        </div>}
    
    </div>
}


export default MyApp