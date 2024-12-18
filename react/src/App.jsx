import { Fragment, useEffect, useState } from "react"
import { Input } from "./components/forms/Input"
import { CheckBox } from "./components/forms/CheckBox"
import { ProductCategoryRow } from "./components/products/ProductCategoryRow"
import { ProductRow } from "./components/products/ProductRow"
const PRODUCTS=[
  {category:"Fruits", price:"$1", stocked:true, name:"Apple"},
  {category:"Fruits", price:"$1", stocked:true, name:"DragonFruit"},
  {category:"Fruits", price:"$1", stocked:false, name:"PassionFruit"},
  {category:"Vegetables", price:"$2", stocked:true, name:"Spinach"},
  {category:"Vegetables", price:"$2", stocked:false, name:"Punokin"},
  {category:"Vegetables", price:"$2", stocked:true, name:"Pass"},
]
function App(){

const [duration, setDuration]=useState(5)
const [secondsLefts, setsecondsLefts]=useState(duration)
const handleChange=(v)=>{
  setDuration(v)
  setsecondsLefts(v)

}
useEffect(()=>{
 const timer = setInterval(() => {
    setsecondsLefts(v=>{
      if(v<=1){
        clearInterval(timer)
        return 0
      }
      return v-1
    })
  }, 1000);
  return ()=>{
    clearInterval(timer)
  }
},[duration])


  const [showStockedOnly, setshowStockedOnly]=useState(false)
  const [search, setSearch]=useState('')
  const [showInput, setShowInput]=useState(true)
  const visibleProducts=PRODUCTS.filter(product=>{
    if(showStockedOnly && !product.stocked){
      return false
    }
    if(search && !product.name.includes(search)){
      return false
    }
    return true
  })

  return <div>
    <Input value={duration}
     placeholder="Timer..."
     onChange={handleChange}
     />
     <p>decompte: {secondsLefts}</p>



    {showInput && <EditTable/>}
    <hr />
    <SearchBar
    search={search}
    onSearchChange={setSearch}
     showStockedOnly={showStockedOnly} 
     onStockedOnlyChange={setshowStockedOnly}/>
     <ProductTables products={visibleProducts} > </ProductTables>
    <div style={{height:'300vh'}}></div>
  </div>
   
  
}

function SearchBar({onSearchChange,search,showStockedOnly,onStockedOnlyChange}){
  return <div>
    <Input value={search} placeholder="du texte"
     onChange={onSearchChange}/>
    <CheckBox checked={showStockedOnly} 
    id="stocked" 
    onChange={onStockedOnlyChange } 
    label="afficher les produits"/>
  </div>
}
function ProductTables({products}){
  const rows=[]
  let lastCategorie=null
  for(let product of products){
    if(product.category !== lastCategorie){
      rows.push(<ProductCategoryRow key={product.category} name={product.category}/>)
    }
    lastCategorie=product.category
    rows.push(<ProductRow product={product} key={product.name}/> )
  }
  return <table>
    <thead>
      <tr>
        <th>Nom du produit</th>
        <th>Le prix</th>
      </tr>
    </thead>
    <tbody>
      {rows}
    </tbody>
  </table>
}


function EditTable(){
  const [title, setTitle]=useState('')
  const [firstName, setFirstName]=useState('')
  const [Y, setY]=useState(0)

  useEffect(()=>{
    document.title=title
  },[title])

  useEffect(()=>{
    const originalTitle=document.title
    return ()=>{
      document.title=originalTitle
    }
  },[])
useEffect(()=>{
  const handler=(e)=>{
    setY(window.scrollY)
  }
  window.addEventListener('scroll',handler)
  return ()=>{
    window.removeEventListener('scroll', handler)
  }
},[Y])

  return <div className="vstack gap-2">
    <Input placeholder="title here"
    value={title}
    onChange={setTitle}
    />
   <Input placeholder="firstNAME"
    value={firstName}
    onChange={setFirstName}
    />

  </div>
}



export default App
