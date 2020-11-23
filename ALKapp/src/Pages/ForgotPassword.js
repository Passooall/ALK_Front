import React from 'react';
import {Image, Text, TextInput, TouchableOpacity, View} from 'react-native';
import { styles, buttons } from '../Components/stylesheet';

export default class LoginPage extends React.Component {
  state={
    email:""
  }
  render(){
    return (
      <View style={styles.container}>
        <Image
          style={styles.tinyLogo}
          source={require('../../assets/ALK_Logo.png')}
        />
        <Text style={[styles.logo, {fontSize: 40}]}>
          Forget Password
        </Text>
        <Text style={styles.forgotTitle}>
            Forgot your Password?
        </Text>
        <Text style={[styles.info,{marginBottom:50}]}>
          Enter your email address and we'll send you a link to reset your password
        </Text>

        <View style = {styles.inputView} >
          <TextInput
            style={styles.inputText}
            placeholder="Email..."
            placeholderTextColor="#003f5c"
            onChangeText={text => this.setState({email:text})}/>
        </View>

        <TouchableOpacity style={buttons.resetBtn}>
          <Text style={styles.loginText}>Reset Password</Text>
        </TouchableOpacity>
      </View>
    );
  }
}

