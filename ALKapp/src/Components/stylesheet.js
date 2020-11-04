import { StyleSheet } from 'react-native';

const styles = StyleSheet.create({
    container: {
      flex: 1,
      backgroundColor: 'white',
      alignItems: 'center',
      justifyContent: 'center',
    },
    logo: {
      fontWeight: "bold",
      fontSize:50,
      color:"#fb5b5a",
      marginBottom:40
    },
    inputView:{
      width:"80%",
      backgroundColor:"#d4d4d4",
      borderRadius:25,
      borderColor:"black",
      height:50,
      marginBottom:10,
      justifyContent:"center",
      padding:20
    },
    inputText:{
      height:70,
      color:"white"
    },
    forgot:{
      color:"black",
      fontSize:11
    },
    info:{
        height:11,
        alignItems:"center",
        justifyContent:"center",
        borderLeftWidth:50,
        borderRightWidth:50,
        borderColor:"white"
      }
    })

const buttons = StyleSheet.create({
    loginBtn:{
      width:"80%",
      backgroundColor:"#fb5b5a",
      borderRadius:25,
      height:50,
      alignItems:"center",
      justifyContent:"center",
      marginTop:40,
      marginBottom:10
    },
    resetBtn:{
        width:"80%",
        backgroundColor:"#fb5b5a",
        borderRadius:25,
        height:50,
        alignItems:"center",
        justifyContent:"center",
        marginTop:70,
        marginBottom:10
      },
    signUpBtn:{
        width:"80%",
        backgroundColor:"#fb5b5a",
        borderRadius:25,
        height:50,
        alignItems:"center",
        justifyContent:"center",
        marginTop:40,
        marginBottom:10
      }
    })

    export { styles, buttons }