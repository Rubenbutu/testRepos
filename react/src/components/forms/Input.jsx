/**
 * 
 * @param {string} value 
 * @param {string} placeholder 
 * @param {(s:string)=>void} onChange 
 * @returns 
 */
export function Input({placeholder,value,onChange}){
  return  <div>
        <input 
            type="text"
            className="form-control"
            name="nom"
            value={value}
            placeholder={placeholder}
            onChange={(e)=>onChange(e.target.value)}
        
        />
    </div>

}