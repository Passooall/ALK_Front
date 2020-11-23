import React from 'react';
import {Image, Text, TextInput, TouchableOpacity, View} from 'react-native';
import { styles, buttons } from '../Components/stylesheet';

export default class LoginPage extends React.Component {
  state={
    email:"",
    password:""
  }
  render(){
    return (
      <View style={styles.container}>
        <Image
          style={styles.tinyLogo}
          source={require('../../assets/ALK_Logo.png')}
        />
        <Text style={styles.logo}>
            Sign In
        </Text>
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
          <TouchableOpacity>
            <Text style={styles.forgot}>Forgot Password?</Text>
          </TouchableOpacity>
          <TouchableOpacity style={buttons.loginBtn}>
            <Text style={styles.loginText}>LOGIN</Text>
          </TouchableOpacity>
           <TouchableOpacity>
            <Text style={styles.loginText}>Signup</Text>
          </TouchableOpacity>
      </View>
    );
  }
}
