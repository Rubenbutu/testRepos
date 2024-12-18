export function CheckBox(checked, id, onChange){
    return <div className="form-check">
        <input 
        id=""
        type="checkbox"
        className="form-chek-input"
        checked={checked}
        onChange={(e)=>onChange(e.target.value)}
        
        />
        <label htmlFor="id" className="form-check-label"></label>
    </div>
}