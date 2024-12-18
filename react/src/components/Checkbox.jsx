export function Checkbox({onChange,checked,label,id}){
 return   <div className="form-check">
        <input 
            type="checkbox"
            id={id}
            checked={checked}
            className="form-check-input"
            onChange={(e)=>onChange(e.target.value)}
         />
         <label htmlFor={id} className="form-check-label">{label}</label>
    </div>
}