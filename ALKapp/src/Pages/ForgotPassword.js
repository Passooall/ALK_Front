import React from 'react';
import { Text, TextInput, TouchableOpacity, View } from 'react-native';
import { styles, buttons } from '../Components/stylesheet';

export default class LoginPage extends React.Component {
  state={
    email:""
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
            placeholder="Email..."
            placeholderTextColor="#003f5c"
            onChangeText={text => this.setState({email:text})}/>
        </View>
        <Text style={styles.info}>
          An E-mail will be sent to you shortly to reset your password
        </Text>
        <TouchableOpacity style={buttons.resetBtn}>
          <Text style={styles.loginText}>Reset Password</Text>
        </TouchableOpacity>
      </View>
    );
  }
}

