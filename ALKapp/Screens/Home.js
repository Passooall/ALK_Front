import React from 'react';
import { StyleSheet, Text, TextInput, TouchableOpacity, View } from 'react-native';

export default class LoginPage extends React.Component {
  render(){
    return (
      <View style={styles.container}>
        <Text style={styles.logo}>
            AL-K
        </Text>
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
  }
});