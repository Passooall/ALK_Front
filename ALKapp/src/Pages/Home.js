import React from 'react';
import { Text, View } from 'react-native';
import { styles } from '../Components/stylesheet';

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
