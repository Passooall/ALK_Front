import React from 'react';
import { StyleSheet, Text, TextInput, TouchableOpacity, View } from 'react-native';

export default class LoginPage extends React.Component {
  state={
    firstname:"",
    lastname:"",
    email:"",
    password:"",
    re_password:""
  }
  render(){
    return (
      <View style={styles.container}>
        <Text style={styles.logo}>
            AL-K
        </Text>
        <View style = {styles.inputView} >
          <TextInput
            style={styles.inputText}
            placeholder="First Name..."
            placeholderTextColor="#003f5c"
            onChangeText={text => this.setState({firstname:text})}/>
        </View>
        <View style = {styles.inputView} >
          <TextInput
            style={styles.inputText}
            placeholder="Last Name..."
            placeholderTextColor="#003f5c"
            onChangeText={text => this.setState({lastname:text})}/>
        </View>
        <View style = {styles.inputView} >
          <TextInput
            style={styles.inputText}
            placeholder="Email..."
            placeholderTextColor="#003f5c"
            onChangeText={text => this.setState({email:text})}/>
        </View>
        <View style = {styles.inputView}>
          <TextInput
            style={styles.inputText}
            secureTextEntry={true}
            placeholder="Password.."
            placeholderTextColor="#003f5c"
            onChangeText={text => this.setState({password:text})} />
        </View>
        <View style = {styles.inputView}>
          <TextInput
            style={styles.inputText}
            secureTextEntry={true}
            placeholder="Re-Enter Password.."
            placeholderTextColor="#003f5c"
            onChangeText={text => this.setState({re_password:text})} />
        </View>     
          <TouchableOpacity style={styles.signUpBtn}>
            <Text style={styles.loginText}>SignUp</Text>
          </TouchableOpacity>
      </View>
    );
  }
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: 'white',
    alignItems: 'center',
    justifyContent: 'center',
  },
  logo: {
    fontWeight: "bold",
    fontSize:30,
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
    height:50,
    color:"white"
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
  },
});