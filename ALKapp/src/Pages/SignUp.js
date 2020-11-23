import React from 'react';
import { Text, TextInput, TouchableOpacity, View, Image } from 'react-native';
import { styles, buttons } from '../Components/stylesheet';

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
        <Image
            style={styles.tinyLogo}
            source={require('../../assets/ALK_Logo.png')}
        />
        <Text style={styles.logo}>
          Sign Up
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
          <TouchableOpacity style={buttons.signUpBtn}>
            <Text style={styles.loginText}>SignUp</Text>
          </TouchableOpacity>
      </View>
    );
  }
}