import { View, Text, StyleSheet, Alert, FlatList, SafeAreaView, Image } from 'react-native'
import React from 'react'
import AppWrapper from '@/components/AppWrapper'
import { Const } from '@/constants/Const'
import Button from '@/components/Button'
import { Colors } from '@/constants/Colors'

import { Data} from '@/constants/data'

export default function BrandsScreen() {

    type ItemProps = {title: string, logo: string };

    const handleNext = () => {
        Alert.alert('Hello Next');
    }

    const Item = ({title, logo}: ItemProps) => (
        <View style={ Styles.brand }>
            <Image style={{ width: 100, height: 100, resizeMode: 'contain' }} source={{ uri: logo }} />
        </View>
    );

    return (
        <SafeAreaView style={ Styles.safearea }>
            <View style={ Styles.container }>

                <View style={ Styles.topWrapper }>
                    <Text style={ Styles.header }>What's your favourite brands</Text>
                    <Text>Let us know about your self</Text>
                </View>

                <View style={ Styles.wrapper }>
                    
                    <FlatList
                        numColumns={3}
                        data={ Data }
                        renderItem={({item}) => <Item title={item.brand_name} logo={item.image} />} />

                </View>

                <View style={ Styles.bottomWrapper }>
                    <Button title="Next" onPress={ handleNext} />
                </View>

            </View>
        </SafeAreaView>
    )
}

const Styles = StyleSheet.create({
    safearea: {
        flex: 1,
        backgroundColor: Colors.light.innerBackground
    },
    container: {
        flex: 1,
        alignItems: 'center',
        justifyContent: 'center',
        padding: Const.padding.appInnerPadding,
    },
    topWrapper: {
        height: 150,
        width: '100%'
    },
    wrapper: {
        flex: 6,
        width: '100%',
    },
    bottomWrapper: {
        flex: 1,
        width: '100%',
        alignItems: 'center',
        justifyContent: 'flex-end'
    },
    header: {
        fontFamily: 'Montserrat-Bold',
        fontSize: 30,
        marginTop: 20,
        marginBottom: 5,
        textAlign: 'left',
    },
    brand: {
        width: 100,
        height: 100,
        backgroundColor: '#fff',
        borderColor: '#aaa',
        borderWidth: 1,
        borderRadius: 120,
        alignItems: 'center',
        justifyContent: 'center',
        margin: 10,
        overflow: 'hidden'
    }
});