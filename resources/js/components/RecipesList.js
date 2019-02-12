import React, { useState, useEffect } from 'react';
import ReactDOM from 'react-dom';
import SingleRecipe  from './SingleRecipe';
import axios from 'axios'

// export const RecipesList = (props) => {
//     const [data, setData] = useState({ data: {} });

//     useEffect(async () => {
//       const result = await axios(
//         'http://127.0.0.1:8000/api/recipes',
//       );
//         console.log(result);
//       setData(result);
//     });
    
//     data? console.log(data): null;

//     return(
        
//             <ul>
//                 {data &&data.map((recipe)=>{
//                     return(
//                         <li>{recipe.title}</li>
//                     )
//                 })}

             
//             </ul>

       
//     )
// };

class RecipeList extends React.Component{
    constructor(props){
        super(props);
        this.state ={
            data: []
        }
    }

    async componentDidMount(){
        const result = await axios('http://127.0.0.1:8000/api/recipes',);
            console.log(result);
        this.setState({
            data: result.data
        })
    }

    render(){
        return(
            <ul>
                {this.state.data && this.state.data.map((recipe)=>{
                    return(
                        <li>{recipe.title}</li>
                    )
                })}
            </ul>
        )
    }
}

export default RecipeList;