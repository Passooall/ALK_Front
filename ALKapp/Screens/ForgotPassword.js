import React from 'react';
import { StyleSheet, Text, TextInput, TouchableOpacity, View } from 'react-native';

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
        <TouchableOpacity style={styles.resetBtn}>
          <Text style={styles.loginText}>Reset Password</Text>
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
    height:50,
    color:"white"
  },
  info:{
    height:11,
    alignItems:"center",
    justifyContent:"center",
    borderLeftWidth:50,
    borderRightWidth:50,
    borderColor:"white"
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
});